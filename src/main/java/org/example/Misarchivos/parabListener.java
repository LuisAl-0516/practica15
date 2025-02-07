// Generated from D:/Automatas/practica_3/src/main/java/org/example/parab.g4 by ANTLR 4.13.2
package org.example.Misarchivos;
import org.antlr.v4.runtime.tree.ParseTreeListener;
import org.example.parabParser;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@link parabParser}.
 */
public interface parabListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@link parabParser#pruable}.
	 * @param ctx the parse tree
	 */
	void enterPruable(parabParser.PruableContext ctx);
	/**
	 * Exit a parse tree produced by {@link parabParser#pruable}.
	 * @param ctx the parse tree
	 */
	void exitPruable(parabParser.PruableContext ctx);
	/**
	 * Enter a parse tree produced by {@link parabParser#x}.
	 * @param ctx the parse tree
	 */
	void enterX(parabParser.XContext ctx);
	/**
	 * Exit a parse tree produced by {@link parabParser#x}.
	 * @param ctx the parse tree
	 */
	void exitX(parabParser.XContext ctx);
}