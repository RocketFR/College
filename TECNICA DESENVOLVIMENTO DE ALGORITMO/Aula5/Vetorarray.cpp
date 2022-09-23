#include <stdio.h>
#include <locale.h>
int main(){
	
	setlocale(LC_ALL, "portuguese");
	int num[5]; //dlecarando vetor numero 0..4
	
	int indice;
	printf ("cadastrando 5 numeros\n\n");
	for (indice = 0; indice <= 4; indice++){
		printf("entre com o %dº numero:\n", indice+1);
		scanf ("%d", &num[indice]);
		
	}
	
	printf ("\n\n Exibindo os valores do vetor\n\n");
	for (indice = 0; indice <= 4; indice++){
	printf("\nNum[%d] = %d", indice,num[indice]);
}
	return 0;
}
