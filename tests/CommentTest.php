<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CommentTest extends TestCase
{

    public function testStore() {
        $this->post("/comments", [
            "article_id" => 1,
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac enim tellus. Donec venenatis rutrum mauris eu molestie. Praesent sollicitudin rutrum leo, non sagittis neque fringilla vel. Integer pellentesque tristique elit, eu sagittis elit dapibus sed. Aliquam in lacus urna. Donec convallis lacus est, id facilisis enim suscipit eget. Aenean eleifend urna tellus, ut hendrerit dui condimentum nec. Vivamus suscipit pretium tristique. Nulla facilisi. Mauris convallis, nisi a bibendum auctor, ligula nibh ullamcorper nisi, at accumsan mi mauris eu mi. Etiam eget justo vitae nulla facilisis tempor. Proin fringilla non nibh id interdum. Aenean quis suscipit est, quis aliquet nisi. Curabitur vehicula enim eget tristique consequat. Integer a justo sit amet massa faucibus condimentum. Duis commodo tincidunt erat, feugiat placerat nulla molestie ut.
            
Vestibulum iaculis urna urna, ac maximus ex maximus at. Ut fermentum ipsum ultrices lacinia feugiat. Aenean nisl justo, fringilla et ipsum vitae, ultrices eleifend ex. Curabitur eget bibendum tortor, sed tempus lacus. Maecenas ante magna, tempus id lacus et, tempor euismod nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sit amet egestas mauris, sed porta magna. Praesent dictum sollicitudin urna, a feugiat erat sagittis eget. Curabitur vel nibh id urna lobortis imperdiet. Ut molestie pharetra vehicula. Nullam luctus lorem sapien, accumsan fermentum metus condimentum ut. Donec consequat turpis bibendum, dignissim lacus id, sagittis ligula. Maecenas iaculis tellus tortor, sed commodo neque malesuada ac. Fusce convallis elementum tortor, vel fermentum elit semper a. Aenean eget lorem eu eros consectetur mattis ut vitae eros.
            
Maecenas vel ante non augue malesuada venenatis. Integer porttitor nulla non tellus interdum, in laoreet mi cursus. Vestibulum condimentum ex commodo mauris lacinia commodo. Integer a odio sed augue rhoncus vestibulum. Vivamus porttitor nisi quis dolor porttitor, eu mattis velit cursus. Etiam urna ipsum, facilisis a eleifend sed, lacinia in ante. Donec commodo quam id laoreet tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sed nulla efficitur, tempor sem nec, laoreet libero. Quisque sollicitudin pellentesque odio maximus maximus. In placerat ornare commodo. Mauris ornare dolor ut enim efficitur mattis. Nulla ut scelerisque velit. Morbi rhoncus erat faucibus, lobortis felis sed, aliquet purus. Aliquam maximus, nisi non rhoncus auctor, lectus tellus feugiat magna, ac varius nunc eros id diam. Proin non dapibus enim, in vehicula risus.
            
Morbi in nisi nisi. Morbi imperdiet leo dolor, quis tempor tortor vulputate sit amet. Nam dignissim ipsum eu commodo consectetur. Vivamus ex mauris, dictum in varius vitae, iaculis non magna. Curabitur feugiat id quam ullamcorper laoreet. Sed suscipit tellus eu erat venenatis porttitor. Vivamus at nisi neque. Donec vitae porttitor diam, nec lobortis erat. Integer pellentesque sit amet turpis nec bibendum.
            
Curabitur egestas ligula massa, id bibendum mauris faucibus ac. Praesent consectetur urna quis felis mattis cursus placerat et diam. Vivamus mattis nisi leo. Nullam dapibus sagittis nisi non feugiat. Nulla rutrum ex lacus, ut facilisis risus rutrum id. Praesent hendrerit ex id turpis porttitor sagittis. Fusce porta urna dui, quis egestas leo luctus ut. Proin posuere diam turpis, vitae tristique ante mattis vulputate. Nam pharetra in ipsum at porta. Ut purus est, faucibus at nunc luctus, vehicula vulputate dui. Morbi tincidunt commodo ligula sit amet imperdiet. Aenean hendrerit fermentum leo nec tempor. In ac dolor fermentum, consectetur erat at, blandit est. Praesent pellentesque metus enim, ac auctor justo posuere nec."
        ], [
            "Authorization" => "pEpYp1NQGIN62dN1t0ALotrG21WXPoZB"
        ])->seeJsonStructure([
            "id"
        ]);
    }

    // public function testDelete() {
    //     $id = 3;
    //     $this->delete("/comments/$id", [], [
    //         "Authorization" => "pEpYp1NQGIN62dN1t0ALotrG21WXPoZB"
    //     ])->seeJson([
    //         "deleted" => $id
    //     ]);
    // }
}
