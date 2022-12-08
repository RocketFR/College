#include <stdio.h>
#include <locale.h>

struct tipo_revista
{
 char titulo[20];
 int quantidade;
 float custo;	
};

main(){
	
	float total[5];	
	struct tipo_revista revista [5];
	int i;
	
	printf ("Cadastrando as revistas!\n");
	
	for (i = 0; i <= 4; i++){
		printf ("\n%d produto", i+1);
		printf ("\nTitulo: ");
		fflush(stdin);
		gets(revista[i].titulo); 
		printf ("\nQuantidade: ");
		scanf ("%d", &revista[i].quantidade);
		printf ("\nCusto Unitario: ");
		scanf ("%f", &revista[i].custo);
		total[i] = revista[i].quantidade * revista[i].custo;
		printf ("\nO custo total eh: %f", total[i]);
			
	}
		
		return 0;
	
		
	
	
	
	
	
	
	
	
	
	
	
}
