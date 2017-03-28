#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n = 1, multiply_with = 5;

    while( n <= 10){
        printf("%d * %d = %d\n", multiply_with, n, multiply_with*n);
        n++;
    }

    return 0;

}
