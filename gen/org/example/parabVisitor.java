// Generated from D:/Automatas/practica_3/src/main/java/org/example/parab.g4 by ANTLR 4.13.2
package org.example;
import org.antlr.v4.runtime.tree.ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced
 * by {@link parabParser}.
 *
 * @param <T> The return type of the visit operation. Use {@link Void} for
 * operations with no return type.
 */
public interface parabVisitor<T> extends ParseTreeVisitor<T> {
	/**
	 * Visit a parse tree produced by {@link parabParser#pruable}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitPruable(parabParser.PruableContext ctx);
	/**
	 * Visit a parse tree produced by {@link parabParser#x}.
	 * @param ctx the parse tree
	 * @return the visitor result
	 */
	T visitX(parabParser.XContext ctx);
}