#include <stdio.h>
#include <stdlib.h>

int find_max(int a[], int n){
    int i, max = a[0];

    for(i = 0; i < n; i++){
        if(a[i] > max){
            max = a[i];
        }
    }
    return max;
}

int main()
{
    int ara[] = {-100, 0, 53, 22, 83, 23, 89, 132, 201, 3, 85};
    int n = 11;

    int max = find_max(ara, n);
    printf("%d\n", max);
    return 0;
}
