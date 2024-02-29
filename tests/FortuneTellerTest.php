<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {
        $fortune = new FortuneTeller();
        $this->relationships_array = array();
        $this->relationships_array[] = "You will have a large family";
        $this->relationships_array[] = "You will have a few close friends";
        $this->relationships_array[] = "You will have a smaller family, but many close friends";
        $this->assertNotNull($fortune->getRelationshipPrediction());
   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {
        $fortune = new FortuneTeller();
        $this->money_array = array();
        $this->money_array[] = "You will be rich";
        $this->money_array[] = "You will be comfortable";
        $this->money_array[] = "There is more to life than money";
        $this->assertEquals(3, count($this->money_array));
   }

   
}
