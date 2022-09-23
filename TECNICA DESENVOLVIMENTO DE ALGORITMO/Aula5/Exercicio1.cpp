#include <stdio.h>
#include <locale.h>
int main(){
	
	setlocale(LC_ALL, "portuguese");
	int idade[5]; //declarando vetor numero 0..4
	int i;
	
	printf ("digite a idade dos alunos\n\n");
	for (i = 0; i <= 4; i++){
		printf("entre com a %dº idade:\n", i+1);
		scanf ("%d", &idade[i]);
	}
	for (i = 0; i <= 4; i++){
	if (idade[i] >= 25)
	{		
		printf ("a idade dos alunos com mais de 25 anos é: %d\n", idade[i]);
    }
}
	return 0;
}
