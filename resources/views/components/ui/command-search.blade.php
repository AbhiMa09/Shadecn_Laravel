@props(['items'])

<div x-data="{
    open: false,
    query: '',
    items: @js($items),
    selectedIndex: 0,
    get filteredItems() {
        if (this.query === '') return []
        return this.items.filter(item => 
            item.title.toLowerCase().includes(this.query.toLowerCase())
        ).slice(0, 10)
    },
    select(url) {
        window.location.href = url
        this.open = false
    },
    init() {
        window.addEventListener('keydown', (e) => {
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault()
                this.open = true
                this.$nextTick(() => { this.$refs.searchInput.focus() })
            }
            if (e.key === 'Escape') {
                this.open = false
            }
        })
        
        this.$watch('query', () => {
            this.selectedIndex = 0
        })
    },
    onKeydown(e) {
        if (!this.open) return

        if (e.key === 'ArrowDown') {
            e.preventDefault()
            if (this.filteredItems.length === 0) return
            this.selectedIndex = (this.selectedIndex + 1) % this.filteredItems.length
        } else if (e.key === 'ArrowUp') {
            e.preventDefault()
            if (this.filteredItems.length === 0) return
            this.selectedIndex = (this.selectedIndex - 1 + this.filteredItems.length) % this.filteredItems.length
        } else if (e.key === 'Enter') {
            e.preventDefault()
            if (this.filteredItems.length > 0) {
                this.select(this.filteredItems[this.selectedIndex].url)
            }
        }
    }
}">

    <button @click="open = true"
        class="inline-flex items-center gap-2 whitespace-nowrap rounded-md border border-input bg-background/50 px-3 py-1.5 text-sm font-medium text-muted-foreground shadow-none ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 w-full md:w-64 lg:w-80 justify-between">
        <span class="inline-flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-4 w-4">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.3-4.3" />
            </svg>
            <span class="hidden lg:inline-flex">Search documentation...</span>
            <span class="inline-flex lg:hidden">Search...</span>
        </span>
        <kbd
            class="pointer-events-none absolute right-1.5 top-1.5 hidden h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 font-mono text-[10px] font-medium opacity-100 sm:flex">
            <span class="text-xs">⌘</span>K
        </kbd>
        <div class="pointer-events-none hidden h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 font-mono text-[10px] font-medium opacity-100 sm:flex">
            <span class="text-xs">Ctrl</span>K
        </div>
    </button>


    <div x-show="open" style="display: none;" class="fixed inset-0 z-50 bg-background/80 backdrop-blur-sm"
        x-transition:enter="animate-in fade-in-0" x-transition:leave="animate-out fade-out-0">
        <div class="fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-0 shadow-lg duration-200 sm:rounded-lg md:w-full"
            @click.outside="open = false">
            <div class="flex items-center border-b px-3" cmdk-input-wrapper="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4 shrink-0 opacity-50">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
                <input
                    class="flex h-11 w-full rounded-md bg-transparent py-3 text-sm outline-none placeholder:text-muted-foreground disabled:cursor-not-allowed disabled:opacity-50"
                    placeholder="Type a command or search..." autocomplete="off" autocorrect="off" spellcheck="false"
                    aria-label="Command Menu" x-model="query" x-ref="searchInput" 
                    @keydown.window.prevent.ctrl.k="$refs.searchInput.focus()"
                    @keydown.arrow-down="selectedIndex = (selectedIndex + 1) % filteredItems.length"
                    @keydown.arrow-up="selectedIndex = (selectedIndex - 1 + filteredItems.length) % filteredItems.length"
                    @keydown.enter="if(filteredItems.length > 0) select(filteredItems[selectedIndex].url)"
                    />
            </div>
            <div class="max-h-[300px] overflow-y-auto overflow-x-hidden">
                <div class="overflow-hidden p-1 text-foreground">
                    <template x-if="query === ''">
                        <div class="py-6 text-center text-sm text-muted-foreground">
                           Type into search...
                        </div>
                    </template>
                    <template x-if="query !== '' && filteredItems.length === 0">
                        <div class="py-6 text-center text-sm text-muted-foreground">
                            No results found.
                        </div>
                    </template>
                    
                    <template x-if="filteredItems.length > 0">
                        <div class="px-2">
                            <h3 class="px-2 py-1.5 text-xs font-medium text-muted-foreground">Suggestions</h3>
                            <template x-for="(item, index) in filteredItems" :key="item.url">
                                <div @click="select(item.url)"
                                    class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none aria-selected:bg-accent aria-selected:text-accent-foreground hover:bg-accent hover:text-accent-foreground cursor-pointer"
                                    :class="{ 'bg-accent text-accent-foreground': index === selectedIndex }">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                                    <span x-text="item.title"></span>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
