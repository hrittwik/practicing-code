#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a[] = {10, 20, 30, 40, 50, 60, 70, 80, 90, 100};
    int b[10];

    int i,j;

    for(i = 0, j = 9; i < 10; i++, j-- ){
        b[j] = a[i];

    }

    for(i = 0; i < 10; i++){
        a[i] = b[i];
    }

    for(j = 0; j < 10; j++){
        printf("%d index of a: %d\n", j, a[j]);
    }

    return 0;
}
