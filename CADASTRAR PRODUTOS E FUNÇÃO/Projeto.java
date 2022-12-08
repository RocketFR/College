import java.util.Scanner;


public class projeto {
    
   
    //Metodo do menu 1
     public static String[] cadastrar(){
        Scanner entrada = new Scanner(System.in);
        String[] nome = new String[3];
        
        for(int i = 0; i < nome.length; i++){
            System.out.println("Entre com o "+(i+1)+"o. produto: ");
            nome[i] = entrada.nextLine();
        }
        
        return nome;
    }
     
     //metodo do menu 2
     public static int[] cadastrarQuantidade(String[] nome){
        Scanner entrada = new Scanner(System.in);
        int[] quantidade = new int[3];
        
        for(int i = 0; i < quantidade.length; i++){
            System.out.println("Entre com a quantidade do produto" 
            + nome[i]+" : ");
            quantidade[i] = entrada.nextInt();
        }
        
        return quantidade;
    }
     
     //metodo do menu 3
     
       public static float[] cadastrarvunitario(String[] nome){
           Scanner entrada = new Scanner(System.in);
           float[] valor = new float [3];
           for (int i = 0; i < valor.length; i++){
               System.out.println ("o valor total do produto\n" + nome[i]+":");
               valor[i] = entrada.nextFloat();
    }
           
    return valor;   
              
           
           
    //metodo do menu 5       
    }       
        public static float[] calcularestoquecada (String[] nome,int[] quantidade,float[] valor){
            float[] valorproduto = valor;             
            for (int i = 0; i < valorproduto.length; i++){               
            valorproduto[i] = quantidade[i] * valor[i];
            System.out.println ("o valor total do produto\n" + nome[i]+ "eh:" + valorproduto[i]);
         
            
    } 
     
              return valorproduto;            
            
    }  
     
     //metodo do menu 6
        
         public static void calcularestoquetotal (float valorproduto[]){
            float valorestoquetotal = 0;             
            for (int i = 0; i < 3; i++){               
            valorestoquetotal += valorproduto[i]; 
            }
            
         System.out.println ("o valor total do estoque eh" +valorestoquetotal);   
         
            
    }
           
    //metodo do menu 4
    
    public static void imprimir(String[] nome){
        for(int i = 0; i < nome.length; i++){
            System.out.println("O "+(i+1)+"o. nome: "+nome[i]);
        }
    }
     
    //programa principal
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        int op;
        String[] nomeProduto = new String[3];
        int[] quantidade = new int[3];
        float[] valor = new float [3];
        float [] valorproduto = new float [3];
        float [] valorprodutototal = new float [3];
        
        
        
        do{

            System.out.println("Menu de opcoes");
            System.out.println("1 - Cadastrar os nomes dos produtos");
            System.out.println("2 - Cadastrar a quantidade em estoque de cada produto");
            System.out.println("3 - Cadastrar o valor unitario de cada  produto");
            System.out.println("4 - Exibir todos os produtos");
            System.out.println("5 - Calular o valor total em estoque de cada produto");
            System.out.println("6 - Calcular o valor total em estoque de todos os produtos");
            System.out.println("0 - Sair do programa");
            
            System.out.println("Entre com a opcao do menu: ");
            op = entrada.nextInt();
            
            if (op >= 0 & op <= 6){
            
                switch(op){
                    case 1: 
                        System.out.println("CADASTRO DOS NOMES DOS PRODUTOS");
                        nomeProduto = cadastrar();
                        break;
                    case 2: 
                        System.out.println("CADASTRO DA QTDE DOS PRODUTOS");
                        quantidade = cadastrarQuantidade(nomeProduto);
                        break;
                    case 3:
                        System.out.println("CADASTRO DO VALOR UN DOS PRODUTOS \n");
                        valor = cadastrarvunitario(nomeProduto);
                        break;
                    case 4:
                        System.out.println("EXBIR OS PRODUTOS");
                        imprimir(nomeProduto);
                        break;
                    case 5:
                        System.out.println("VALOR TOTAL EM ESTOQUE DE CADA PRODUTO");
                        valorproduto = calcularestoquecada(nomeProduto,quantidade,valor);
                        break;
                    case 6:
                        System.out.println("VALOR TOTAL EM ESTOQUE - GERAL");
                        calcularestoquetotal (valorproduto);
                         break;
                }
            }else
            {
                    System.out.println("Voce digitou uma opcao invalida!!");
            }
            }while(op != 0);

        entrada.close();
    }
  
}