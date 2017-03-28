#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n = 0;

    while( n < 10 ){
        n++;
        if( n % 2 == 0){
            continue;
        }

        printf("%d\n", n);
    }

    return 0;
}
