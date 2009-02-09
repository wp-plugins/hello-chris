<?php
/**
	Plugin Name: Chris' lessons
	Plugin URI: http://wordpress.org/#
	Description: This is a modification of the Hello Dolly plugin for the Wordpress admin interface which shows Chris Crawford's lessons on game design in the header of the admin module in wordpress.
	Author: neonleif
	Version: 0.1
	Author URI: http://neonleif.dk/
*/

function hello_chris_get_lyric() 
{
	/** 
		These are the Chris Crawford's lessons on game design 
	*/
	$quotes = "Lesson # 1. Game design is not at all the same as game programming. [Crawford, 2003]
	Lesson # 2. It’s easier to learn from turkeys than from masterworks. [Crawford, 2003]
	Lesson # 3. Those who would build the future must understand the past. [Crawford, 2003]
	Lesson # 4. Good games do not simulate physical reality; they mirror emotional reality. [Crawford, 2003]
	Lesson # 5. Keep the player on the razor edge of failure, but don’t let him fall. [Crawford, 2003]
	Lesson # 6. The whole world is fun; you don’t need to look under rocks or in caves for it. [Crawford, 2003]
	Lesson # 7. Use the word ‘fun’ as you would any other approbatory term, such as ‘cool’, ‘far out’ ‘groovy’, or ‘neat-o’. [Crawford, 2003]
	Lesson # 8. Eliminate loopholes that allow the player to evade the challenge of the game. [Crawford, 2003]
	Lesson # 9. Work on social reasoning designs. [Crawford, 2003]
	Lesson # 10. Games, like stories, require conflict to have any life. [Crawford, 2003]
	Lesson # 11. Interactivity is the essence of what you are selling. [Crawford, 2003]
	Lesson # 12. Eschew data-intensive designs; aspire to process-intensity. [Crawford, 2003]
	Lesson # 13. Read more. [Crawford, 2003]
	Lesson # 14. Wonder more. [Crawford, 2003]
	Lesson # 15. Get creative! Get tyranosaurical! [Crawford, 2003]
	Lesson # 16. The absence of graphic information can be just as stimulating to the player’s imagination as its presence. [Crawford, 2003]
	Lesson # 17. Realistic graphics must be matched by realistic behavior; if you can’t achieve the latter, ditch the former. [Crawford, 2003]
	Lesson # 18. Match the realism of the cosmetics with the realism of the fantasy. [Crawford, 2003]
	Lesson # 19. Improving a game design requires both addition and subtraction. [Crawford, 2003]
	Lesson # 20. Conceptualize your design in terms of its challenge, not its topic. [Crawford, 2003]
	Lesson # 21. Lose the storyboards. [Crawford, 2003]
	Lesson # 22. The tool has a strong influence on the weak-minded; we must be wary. [Crawford, 2003]
	Lesson # 23. Don’t get a job in the games industry unless you really, really love games. [Crawford, 2003]
	Lesson # 24. Learn everything you can. [Crawford, 2003]
	Lesson # 25. There are a million great game ideas just waiting to be implemented. [Crawford, 2003]
	Lesson # 26. It’s the verbs, stupid! [Crawford, 2003]
	Lesson # 27. Interactive storytelling requires revolutionaries, not evolutionaries. [Crawford, 2003]
	Lesson # 28. Build licensed products for money, not creative challenge. [Crawford, 2003]
	Lesson # 29. Never build a technology and then go looking for a game to fit it. [Crawford, 2003]
	Lesson # 30. Play non-electronic games, too. [Crawford, 2003]
	Lesson # 31. Begin each project with a one-page specification of the game play. [Crawford, 2003]
	Lesson # 32. When you’re creatively stumped, don’t try to force it; do something else for a month or two. [Crawford, 2003]
	Lesson # 33. Defer unanticipated but desirable features until late in the project. [Crawford, 2003]
	Lesson # 34. If you’re not passionate about it, the best you can achieve is competence. [Crawford, 2003]
	Lesson # 35. The logic of the game dominates; pick a topic to fit it. [Crawford, 2003]
	Lesson # 36. Young programmers can be stubborn asses. [Crawford, 2003]
	Lesson # 37. Design your games as play experiences, not visual experiences. [Crawford, 2003]
	Lesson # 38. Sometimes the most brilliant design stroke is to kill the idea. [Crawford, 2003]
	Lesson # 39. Other people can’t see your vision; you have to make it happen yourself. [Crawford, 2003]
	Lesson # 40. Always be on guard against the tendency to think in the old ways. [Crawford, 2003]
	Lesson # 41. Don’t panic. Take the time to evaluate the design as a whole. [Crawford, 2003]
	Lesson # 42. Humbly obey the Muse of Design; ignore the Harpy of Politics. [Crawford, 2003]
	Lesson # 43. Always ask, 'What does the user do?' [Crawford, 2003]
	Lesson # 44. With enough imagination, you can find models to solve any problem. [Crawford, 2003]
	Lesson # 45. Yeah, sure, if it ain’t broke, don’t fix it; but if it IS broke, fix it NOW! [Crawford, 2003]
	Lesson # 46. To design a symphonic game, you must broadly educate yourself. [Crawford, 2003]
	Lesson # 47. Sequels are for entertainment; they have no artistic content. [Crawford, 2003]
	Lesson # 48. Don’t struggle to find the answer, struggle to find the right question; the answer will then be obvious. [Crawford, 2003]
	Lesson # 49. Know thy platform intimately. Understand its strengths and weaknesses. [Crawford, 2003]
	Lesson # 50. Game designers have no talent for marketing. Let the pros cook up the title. [Crawford, 2003]
	Lesson # 51. Know when it’s time to throw in the towel on a feature. [Crawford, 2003]
	Lesson # 52. Fantasize. Play what-if games. Ask silly questions. Why aren’t cows green like grass? [Crawford, 2003]
	Lesson # 53. Read! Read! Read! [Crawford, 2003]
	Lesson # 54. In each project, do at least one special task by hand. [Crawford, 2003]
	Lesson # 55. Take no pride in facts memorized, but in ideas grasped. [Crawford, 2003]
	Lesson # 56. Polish, polish, polish! Take a minimum of six months after alpha for polishing. [Crawford, 2003]
	Lesson # 57. Fame doesn’t mean shit. [Crawford, 2003]
	Lesson # 58. Publishers hold all the cards; designers are lucky to get whatever they can. [Crawford, 2003]
	Lesson # 59. Design springs from the heart. [Crawford, 2003]
	Lesson # 60. Write design essays to clarify your thoughts. [Crawford, 2003]
	Lesson # 61. Experiment with intransitive combat relationships. [Crawford, 2003]
	Lesson # 62. Always delete clever ideas that don’t add to the design. [Crawford, 2003]
	Lesson # 63. Evaluate each contemplated feature by its color/dirt ratio. [Crawford, 2003]
	Lesson # 64. Use interstitial stories to add color and flavor to the game with little dirt. [Crawford, 2003]
	Lesson # 65. Limit yourself to one major innovation per game. [Crawford, 2003]
	Lesson # 66. Don’t be such a square! Think about alternative ways of organizing space in your design. [Crawford, 2003]
	Lesson # 67. This algorithm can be used to generate any kind of sequence: musical notes, sequences of aerial maneuvers, moves in a game, etc. [Crawford, 2003]
	Lesson # 68. Hey, it’s just a game! Judiciously chosen levity is entirely appropriate. [Crawford, 2003]
	Lesson # 69. You must have a clear conception of the central conflict of your design. [Crawford, 2003]
	Lesson # 70. Sometimes a great idea just doesn’t make the game any better. [Crawford, 2003]
	Lesson # 71. The interface serves the game, not the other way around. [Crawford, 2003]
	Lesson # 72. No matter what the schedule says, give the game enough time to get it right. [Crawford, 2003]
	Lesson # 73. Know your topic inside and out. [Crawford, 2003]
	Lesson # 74. Accept full moral responsibility for the games you design. [Crawford, 2003]
	Lesson # 75. math: Eschew sensitive functions like exponentials or hyperbolas. [Crawford, 2003]
	Lesson # 76. math: Dampen excursions with shock-absorbing functions. [Crawford, 2003]
	Lesson # 77. math: Buffer divisors with additive elements. [Crawford, 2003]
	Lesson # 78. math: Stick to the basic four functions. [Crawford, 2003]
	Lesson # 79. math: Don’t use Boolean-modulated multi-part functions. [Crawford, 2003]
	Lesson # 80. math: Use only one mathematical operation per line of code. [Crawford, 2003]
	Lesson # 81. math: Don’t commit 'formula grabbing.' [Crawford, 2003]
	Lesson # 82. math: Assert maximum and minimum allowable values for each variable. [Crawford, 2003]
	Lesson # 83. Decide whether to hire an artist or an illustrator. [Crawford, 2003]
	Lesson # 84. Defeat crackers with psychology, not technology. [Crawford, 2003]
	Lesson # 85. A more artistic strategy does not obviate commercial success. [Crawford, 2003]
	Lesson # 86. In the games biz, trust no one. [Crawford, 2003]
	Lesson # 87. In the long run, the ethical choice is usually the most advantageous choice. [Crawford, 2003]
	Lesson # 88. The nasty choice is usually the least advantageous choice. [Crawford, 2003]
	Lesson # 89. If you don’t fail at least 90 percent of the time, you’re not aiming high enough. [Crawford, 2003]
	Lesson # 90. Look before you liquidate. [Crawford, 2003]
	Lesson # 91. Business is indeed war in the sense that the casualties are real. [Crawford, 2003]
	Lesson # 92. Hyperbole invites hilarity. [Crawford, 2003]
	Lesson # 93. There are some cultural universals, and falling on your butt is one of them. [Crawford, 2003]
	Lesson # 94. Integrity is an unexpected virtue. [Crawford, 2003]
	Lesson # 95. Your game must be fun on typical machines, not top-of-the-line machines. [Crawford, 2003]
	Lesson # 96. Money can ruin a noble cause. [Crawford, 2003]";

	// Here we split it into lines
	$quotes = explode("\n", $quotes);

	// And then randomly choose a line
	return wptexturize( $quotes[ mt_rand(0, count($quotes) - 1) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_chris() {
	$chosen = hello_chris_get_lyric();
	echo "<p id='chris'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'hello_chris');

// We need some CSS to position the paragraph
function chris_css() {
	echo "
		<style type='text/css'>
	#chris {
		position: absolute;
		top: 4.5em;
		margin: 0;
		padding: 0;
		right: 215px;
		font-size: 11px;
	}
	</style>
		";
}

add_action('admin_head', 'chris_css');

?>
