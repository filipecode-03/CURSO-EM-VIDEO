package pratica.ex04;

import java.util.Locale;

public class server02 {
    public static void main(String[] args) { 
        Locale idioma = Locale.getDefault(); 
        System.out.println("O idioma do sistema é: " + idioma.getDisplayLanguage()); 
    }
}
