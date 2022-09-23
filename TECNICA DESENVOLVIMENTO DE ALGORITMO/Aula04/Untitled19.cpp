#include <stdio.h>
int main(){
	
	
    
    for ( int a = 0; a <= 5; a++)
    { int x = 1 ;
      printf ("\nDigite os numeros desejados");
	  scanf  ("%d", &x);
	  int antecessor = x - 1;
	  int sucessor = x + 1;	  	
	  printf ("\n%d%d%d", antecessor, a, sucessor);
	  
	} 
	
	return 0;
	
}
