<?php

class OAuthControllerTest extends TestCase {

    public function testCreateMethod() {
        $this->get('oauth/create')
                ->seeJsonEquals([
        ]);
    }

}
