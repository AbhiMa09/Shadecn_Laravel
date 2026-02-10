@props(['class' => ''])

<div x-data="{
    date: new Date(),
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    selectedDate: new Date(),
    days: [],
    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    
    init() {
        this.renderCalendar();
    },
    
    renderCalendar() {
        const firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
        const daysInMonth = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
        const prevDaysInMonth = new Date(this.currentYear, this.currentMonth, 0).getDate();
        
        this.days = [];
        
        // Previous month days
        for (let i = firstDay; i > 0; i--) {
            this.days.push({
                day: prevDaysInMonth - i + 1,
                current: false
            });
        }
        
        // Current month days
        for (let i = 1; i <= daysInMonth; i++) {
            this.days.push({
                day: i,
                current: true
            });
        }
        
        // Next month days (fill the grid)
        const remaining = 42 - this.days.length;
        for (let i = 1; i <= remaining; i++) {
            this.days.push({
                day: i,
                current: false
            });
        }
    },
    
    prevMonth() {
        if (this.currentMonth === 0) {
            this.currentMonth = 11;
            this.currentYear--;
        } else {
            this.currentMonth--;
        }
        this.renderCalendar();
    },
    
    nextMonth() {
        if (this.currentMonth === 11) {
            this.currentMonth = 0;
            this.currentYear++;
        } else {
            this.currentMonth++;
        }
        this.renderCalendar();
    },
    
    isSelected(day) {
        return this.selectedDate.getDate() === day && 
               this.selectedDate.getMonth() === this.currentMonth && 
               this.selectedDate.getFullYear() === this.currentYear;
    },
    
    isToday(day) {
        const today = new Date();
        return today.getDate() === day && 
               today.getMonth() === this.currentMonth && 
               today.getFullYear() === this.currentYear;
    },
    
    selectDate(day) {
        this.selectedDate = new Date(this.currentYear, this.currentMonth, day);
    }
}" class="p-3 {{ $class }} bg-card text-card-foreground border border-border rounded-lg shadow-sm w-fit"
    id="calendar-component">
    <div class="space-y-4">
        <div class="relative flex items-center justify-between pt-1">
            <div class="text-sm font-medium" x-text="monthNames[currentMonth] + ' ' + currentYear"></div>
            <div class="flex space-x-1">
                <button @click="prevMonth"
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground border border-input bg-transparent h-7 w-7 p-0 opacity-70 hover:opacity-100">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </button>
                <button @click="nextMonth"
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground border border-input bg-transparent h-7 w-7 p-0 opacity-70 hover:opacity-100">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="grid grid-cols-7 mb-1">
                    <template x-for="day in ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa']">
                        <th class="text-muted-foreground font-normal text-[0.8rem] text-center w-9 h-9 flex items-center justify-center"
                            x-text="day"></th>
                    </template>
                </tr>
            </thead>
            <tbody class="grid grid-cols-7 gap-1">
                <template x-for="(dayObj, index) in days" :key="index">
                    <td class="p-0 text-center text-sm relative">
                        <button @click="dayObj.current ? selectDate(dayObj.day) : null" :class="{
                                'bg-primary text-primary-foreground': dayObj.current && isSelected(dayObj.day),
                                'text-muted-foreground/30': !dayObj.current,
                                'hover:bg-accent hover:text-accent-foreground': dayObj.current && !isSelected(dayObj.day),
                                'bg-accent/50 text-accent-foreground': dayObj.current && isToday(dayObj.day) && !isSelected(dayObj.day)
                            }"
                            class="h-9 w-9 p-0 font-normal rounded-md inline-flex items-center justify-center transition-all"
                            x-text="dayObj.day">
                        </button>
                    </td>
                </template>
            </tbody>
        </table>
    </div>
</div>