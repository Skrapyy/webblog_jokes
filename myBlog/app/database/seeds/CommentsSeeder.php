<?php
class CommentsSeeder extends Seeder {
	
	public function run() {
		DB::table('comments')->delete();

			 Comments::create(array(
			'title'=>'mon avis sur usual suspect',
			'author'=>'Kevin',
			'text'=>'On va pas tortiller de ce que vous savez pendant 107 ans et l’on va dire les choses comme elles sont réellement: se frotter à « Usual Suspects », c’est se frotter à l’un des meilleurs films de gangsters et policier jamais réalisés. La voilà la réalité mesdames et messieurs ! Au cinéma, il n’y a pas trente six mille règles, mais il y en a une qui est universelle: pour faire un bon film, il faut une bonne histoire, de bons acteurs et si possible des dialogues percutants, et trois fois sur quatre, c’est dans la poche, in ze Pocket comme dirait l’autre. Ben « Usual Suspects » c’est tout à fait ça: un scénario du tonnerre suivant une trame non linéaire et qui commence par la fin, des acteurs au top, tous au diapason et très impliqués dans leur rôle respectif, et surtout des dialogues qui envoient du rêve à des kilomètres à la ronde. En gros, ça déchire grave ! A titre personnel, il y a longtemps qu’un film de ce genre ne m’avait pas autant scotché et passionné. Même les thrillers de Scorsese ne m’avaient pas autant emballé, et pourtant Scorsese, c’est du méga top niveau. On se souvient tous de « Mean Streets », des « Affranchis » ou de « Casino ». Mais pour moi, « Usual Suspects » c’est encore un ton au dessus. C’est grand, tout simplement. C‘est tout bon. La réalisation est implacable, c’est rythmé, y a de l’action et le déroulement de l’histoire est d’une rare cohérence. Je désespérais un peu. A mon goût, je n’avais pas vu de chef-d’œuvre depuis « Baxter » et là, je tombe sur un vrai de vrai. Je suis aux anges. Vous avez tous pigé, j’ai été complètement subjugué. Allez, 5 étoiles sans hésiter la moindre seconde, et si je pouvais j’en mettrais même une sixième.',
			
		));
	}
}