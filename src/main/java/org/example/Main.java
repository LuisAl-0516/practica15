package org.example;
import org.antlr.v4.runtime.CommonTokenStream;
import org.example.Misarchivos.parabParser;
import org.example.Misarchivos.parabLexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.tree.ParseTree;

import java.util.Scanner;

import static org.antlr.v4.runtime.CharStreams.fromString;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
        try {
            String input;
            Scanner scanner=new Scanner(System.in);
            do {
                System.out.print("ingrese una expresion >");
                input =scanner.nextLine();
                if (input.equals("exit")){
                    continue;
                }

                CharStream ch = fromString(input);
                PuLexer lexer = new PuLexer(ch);
                CommonTokenStream token = new CommonTokenStream(lexer);
                PuParser parser = new PuParser(token);
                ParseTree tree=parser.prule();
                visitarbol visitor = new visitarbol();
                visitor.visit(tree);
                System.out.print(tree.getChild(0));
            } while (!input.equals("exit"));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}