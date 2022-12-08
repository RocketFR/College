#include <stdlib.h>
#include <stdio.h>

int subtrair (int x, int y)

{
	int resultado;
	resultado = x - y;
	return (resultado);		
	
}

	int main (void)
{
	int a, b, mecflu;
	printf ("Digite o primeiro valor:");
	scanf ("%d", &a);
	printf ("Digite o segundo valor:");
	scanf ("%d", &b);
	if (a < b ){
	mecflu = subtrair (a,b);
	}else{
	mecflu = subtrair (b,a);	
	} 
	
	
	 	
	printf("Resultado = %d\n" , mecflu);                             
	
	
	
	
	return 0;
	
	
}
