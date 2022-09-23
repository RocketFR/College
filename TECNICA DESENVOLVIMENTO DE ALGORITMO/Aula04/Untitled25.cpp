#include <stdio.h>
int main(){
	 int a = 1; 
        float acumulador = 0;
        float altura = 0;
          
        for (int a = 1; a <= 5; a++ ){       
            printf("Digite a altura da pessoa\n");
            scanf ("%f", &altura); 
            acumulador+=altura;
                        
        }   
        
       
        
        float media = acumulador/2;
        
        printf("\n%f", media);  
}
