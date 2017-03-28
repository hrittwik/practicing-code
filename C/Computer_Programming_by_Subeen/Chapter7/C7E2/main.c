#include <stdio.h>
#include <stdlib.h>

double add(double a, double b);

int main()
{

    double a, b, c;
    a = b = 2.8;
    c = add(a, b);
    printf("%lf \n", c);
    return 0;
}

double add(double a, double b){
    double sum = a + b;
    return sum;
}

