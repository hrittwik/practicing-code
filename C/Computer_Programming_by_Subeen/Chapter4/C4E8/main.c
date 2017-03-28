#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n, m = 0, multiply_with = 6;

    for(n = 1; n <= 10; n++){
        m = m + multiply_with;
        printf("%d X %d = %d\n", multiply_with, n, m);

    }

    return 0;
}
