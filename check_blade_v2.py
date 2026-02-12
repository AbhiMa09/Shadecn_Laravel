
import os
import re

def check_file(filepath):
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # Simple count check
    if_count = len(re.findall(r'@if\s*\(', content))
    endif_count = len(re.findall(r'@endif\b', content))
    
    if if_count != endif_count:
        print(f"MISMATCH: {filepath} (@if:{if_count}, @endif:{endif_count})")

def main():
    root_dir = '/home/genrl/Documents/Shadecn_Laravel/resources/views'
    for dirpath, dirnames, filenames in os.walk(root_dir):
        for filename in filenames:
            if filename.endswith('.blade.php'):
                filepath = os.path.join(dirpath, filename)
                check_file(filepath)

if __name__ == '__main__':
    main()
