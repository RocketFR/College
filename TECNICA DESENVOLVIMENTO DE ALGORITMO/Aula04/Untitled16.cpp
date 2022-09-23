#include <stdio.h>

int main(){
	
	int a = 1 ;
	
    
    do 
    { int x = 1 ;
      printf ("\nDigite os numeros desejados");
	  scanf  ("%d", &x);
	  int antecessor = x - 1;
	  int sucessor = x + 1;	  	
	  printf ("\n%d%d%d", antecessor, a, sucessor);
	  a++;
	} while ( a <= 5);
	
	return 0;
	
}

