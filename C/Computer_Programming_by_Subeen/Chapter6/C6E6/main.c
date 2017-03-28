#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a[] = {10, 20, 30, 40, 50, 60, 70, 80, 90, 100};
    int b[10];

    int i, j, temp;

    /***for(i = 0; i < 10; i++){
        printf("%d index of a: %d\n", i, a[i] );
    }***/

    for(i = 0, j = 9; i < 10, i < j; i++ , j--){
        temp = a[i];
        a[i] = a[j];
        a[j] = temp;

        //printf("%d index of a: %d\n", i, a[i] );
        //printf("%d index of a: %d\n", j, a[j] );

    }

    for(i = 0; i < 10; i++){
        printf("%d index of a: %d\n", i, a[i] );
    }

    return 0;
}
