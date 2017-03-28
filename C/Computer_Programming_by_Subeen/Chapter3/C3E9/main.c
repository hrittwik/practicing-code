#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a = 10, b = 6, result;

    result = a - (a/b) *b;
    printf("result with formula: %d \n", result);
    result = a % b;
    printf("result without modulus: %d \n", result);

    return 0;
}
