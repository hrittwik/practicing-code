#include <stdio.h>
#include <stdlib.h>

int main()
{
    int multiply_with = 1, i;

    for(i = 1; i <= 20; i++){
        printf("Multiplication table of %d: \n", i);

        for(multiply_with = 1; multiply_with <= 10; multiply_with++){
            printf("%d * %d = %d\n", i, multiply_with, multiply_with*i);

        }
    }
    return 0;
}
