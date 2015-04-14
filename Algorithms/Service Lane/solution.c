#include <stdio.h>
int largest_vehicle(int i, int j, int width[]) {
    int vehicle = 3;
    for(i; i<=j; i++) {
        vehicle = width[i] >= vehicle? vehicle : width[i];
    }
    return vehicle;
}
int main(int argc,char **argv) {
    int n = 0;
    int t = 0;
    int i = 0,j = 0;
    int iter;
    scanf("%d",&n);
    int width[n];
    scanf("%d",&t);
    for(iter = 0;iter < n;iter++) {
        scanf("%d",&(width[iter]));
    }
    for(iter = 0;iter < t;iter++) {
        scanf("%d",&i);
        scanf("%d",&j);
        printf("%d\n",largest_vehicle(i,j,width));
    }
    return 0;
}
