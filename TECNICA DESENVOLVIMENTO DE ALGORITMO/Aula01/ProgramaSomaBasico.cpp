//Aluno: Lucas Rodrigues Gomes//
//RGM:   29997194             //

#include <iostream> //incluindo uma biblioteca//
#include <Locale.h> //Incluindo uma biblioteca//

int main () //Um Unico main para multiplas rotinas.//
{//demilidar um bloco de codigos, mas nada impede de ter outras chaves//
    setlocale(LC_ALL,"Portuguese"); // Permite colocar acentos �,�,^//
    int num1, num2, soma; //Declara��o de variav�is do tipo inteiro//
	printf("Digite o primeiro numero para adi��o \n"); //Escreve para o usu�rio a frase explicita//
    scanf("%i", &num1); //Escaneando o valor que o usuario digitou e armazenando em uma variav�l//
    printf("Digite o segundo numero para adi��o \n"); ////Escreve para o usu�rio a frase explicita//
    scanf("%i", &num2); //Escaneando o valor que o usuario digitou e armazenando em uma variav�l/
    soma=num1+num2; //Realiza a opera��o de soma entre o valor armazenado na variavel num1 e num2//
    printf("O resultado da soma eh: %i \n\n",soma);//Escreve para o usu�rio o resultado da opera��o//
    system("pause"); //Pausa o programa//
    return 0; //retorna o valor//	
}

