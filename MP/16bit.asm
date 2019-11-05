data segment

msg1 db 10,13, "Enter your choice: $"
msg2 db 10,13, "1.Addition $"
msg3 db 10,13, "2.Subtraction $"
msg4 db 10,13, "3.Exit $"
msg5 db 10,13, "Enter the number: $"
msg6 db 10,13, "The result is: $"
msg7 db 10,13, "$"

result dw ?
choice db ?
num1 dw ?
num2 dw ?
copy db ?

data ends


code segment

assume cs:code, ds:data
start:

    mov ax,data
    mov ds, ax
    
    mov dx, offset msg5 
    mov ah, 09h
    int 21h
    
    
    ;Number One
   
    call input                  ; Upper nibble
    rol al, 04h
    mov copy, al
    mov bl,al
    
    call input
    mov bl, copy
    add bl,al
    mov bh, bl
    
    call input                  ; Lower nibble
    rol al, 04h
    mov copy, al
    mov bl,al
  
    call input
    mov bl, copy
    add bl,al                   ; first 16bit number stored in reg BX
    mov num1, bx
    
    
    
    
    mov dx, offset msg5 
    mov ah, 09h
    int 21h
    
    
    ;Number Two
   
    call input                  ; Upper nibble
    rol al, 04h
    mov copy, al
    mov bl,al
    
    call input
    mov bl, copy
    add bl,al
    mov bh, bl
    
    call input                  ; Lower nibble
    rol al, 04h
    mov copy, al
    mov bl,al
  
    call input
    mov bl, copy
    add bl,al                   ; first 16bit number stored in reg BX
    mov num2, bx
    
    
    
    
    menu:
    ;displaying message
    mov dx, offset msg1
    mov ah, 09h
    int 21h

    mov dx, offset msg2
    mov ah, 09h
    int 21h

    mov dx, offset msg3
    mov ah, 09h
    int 21h

    mov dx, offset msg4
    mov ah, 09h
    int 21h

    mov dx, offset msg7 
    mov ah, 09h
    int 21h

    call input
    cmp al, 03h
    jnz addition
    
    exit:  
    
            mov ah, 4ch
            int 21h
    
    addition:
            cmp al, 01h        
            jnz subtraction
            
            mov bx, num1
            mov cx, num2
            
            add bx, cx
            mov result , bx
            
            mov dx, offset msg6         ; Displaying the ouput 
            mov ah, 09h
            int 21h
            
            mov bx,result                
            and bx, 0F000h              
            ror bx, 0Ch
            call output

            mov bx, result
            and bx, 0F00h
            ror bx, 08h
            call output

            mov bx, result
            and bx, 00F0h
            ror bx, 04h
            call output

            mov bx, result
            and bx, 000Fh
            call output
            
            jmp menu

    subtraction:    
            cmp al, 02h
            jnz exit
            
            mov bx, num1
            mov cx, num2
            
            sub bx, cx
            mov result , bx
            
            mov dx, offset msg6         ; Displaying the ouput 
            mov ah, 09h
            int 21h
            
            mov bx,result                
            and bx, 0F000h              
            ror bx, 0Ch
            call output

            mov bx, result
            and bx, 0F00h
            ror bx, 08h
            call output

            mov bx, result
            and bx, 00F0h
            ror bx, 04h
            call output

            mov bx, result
            and bx, 000Fh
            call output
    
            jmp menu
    
input proc

    mov ah, 01h
    int 21h
    
    cmp al, 41h
    jc X
    sub al, 07h
    X:
    sub al, 30h
ret
endp

output proc
    
    cmp bl, 0Ah
    jc Y
    add bl, 07h
    Y:
    add bl, 30h
    
    mov dl,bl
    mov ah, 02h
    int 21h
ret
endp


code ends
end start