#include <stdio.h>

int main(){
	
	int a = 1 ;
    
    do 
    { int x = 1 ;
      int y = 1 ;	
      printf ("\nDigite a nota 1 do aluno");
	  scanf ("\n%d", &x);
	  printf ("\nDigite a note 2 do aluno");
	  scanf  ("\n%d", &y);
	  int media = (x + y)/2;
	  
	  printf ("\n%d%", media);
	  a++;
	}
	
	while (a <= 10);
	
	return 0;
	
}
