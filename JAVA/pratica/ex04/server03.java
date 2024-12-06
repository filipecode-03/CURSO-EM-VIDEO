package pratica.ex04;

import java.awt.Dimension; import java.awt.Toolkit;

public class server03 {
    public static void main(String[] args) { 
        Dimension tamanho = Toolkit.getDefaultToolkit().getScreenSize(); 
        int largura = (int) tamanho.getWidth(); 
        int altura = (int) tamanho.getHeight(); 
        System.out.println("Sua resolução é: " + largura + " x " + altura); 
    }
}
