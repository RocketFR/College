//Aluno: Lucas Rodrigues Gomes//
//RGM:   29997194             //

#include <iostream> //incluindo uma biblioteca//
#include <Locale.h> //Incluindo uma biblioteca//

int main () //Um Unico main para multiplas rotinas.//
{//demilidar um bloco de codigos, mas nada impede de ter outras chaves//
    setlocale(LC_ALL,"Portuguese"); // Permite colocar acentos ç,ã,^//
    int num1, num2, soma; //Declaração de variavéis do tipo inteiro//
	printf("Digite o primeiro numero para adição \n"); //Escreve para o usuário a frase explicita//
    scanf("%i", &num1); //Escaneando o valor que o usuario digitou e armazenando em uma variavél//
    printf("Digite o segundo numero para adição \n"); ////Escreve para o usuário a frase explicita//
    scanf("%i", &num2); //Escaneando o valor que o usuario digitou e armazenando em uma variavél/
    soma=num1+num2; //Realiza a operação de soma entre o valor armazenado na variavel num1 e num2//
    printf("O resultado da soma eh: %i \n\n",soma);//Escreve para o usuário o resultado da operação//
    system("pause"); //Pausa o programa//
    return 0; //retorna o valor//	
}

