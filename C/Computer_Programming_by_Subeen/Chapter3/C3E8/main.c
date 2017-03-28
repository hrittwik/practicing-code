#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;

    printf("Enter a number:");
    scanf("%d", &n);

    if( n % 2 == 0 ){
        printf("n is even.");
    }
    else{
        printf("n is odd.");
    }

    return 0;
}
