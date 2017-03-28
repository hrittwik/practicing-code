#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n, multiply_with = 5;

    for(n = 1; n <= 10; n++){
        printf("%d * %d = %d\n", multiply_with, n, multiply_with*n);

    }

    return 0;
}
