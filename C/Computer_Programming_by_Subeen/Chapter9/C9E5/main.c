#include <stdio.h>
#include <stdlib.h>

int string_length(char str[]){
    int i, length=0;

    for(i = 0; str[i] != '\0'; i++){
        length++;
    }
    return length;
}


int main()
{

    char country[100];

    while(NULL != gets(country)){
        printf("%d", string_length(country));
    }
    return 0;
}
