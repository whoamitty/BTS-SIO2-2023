<?php


abstract class Rule {
    protected $description;
    
    public function __construct($description) {
        $this->description = $description;
    }
    
    abstract public function getDescription();
}

final class Punishment extends Rule {
    // Additional properties and methods specific to punishments
    public function getDescription() {
        return $this->description;
    }
}

class Reward extends Rule {
    // Additional properties and methods specific to rewards
    public function getDescription() {
        return $this->description;
    }
}

class CustomException extends Rule {
    // Additional properties and methods specific to exceptions
    public function getDescription() {
        return $this->description;
    }
}

class OtherRule extends Rule {
    // Additional properties and methods specific to author rules
    public function getDescription() {
        return $this->description;
    }
}

// $rule1 = new Punishment("If a short is watched completely outside the allowed periods, the next reward is cancelled.");
// $rule2 = new Punishment("If a rule is not respected, the next reward is cancelled, and the movie, episode, or video of the day is cancelled.");

$reward1 = new Reward("Reward 1 description");
$exception1 = new CustomException("If there is an opportunity to spend time with the girl I love and it is incompatible with one or more of these rules, it is up to me to decide whether to dedicate that time to her.");

$otherRules = new OtherRule("Daily: I either watch a movie, a TV episode, or a YouTube video. As an alternative form of entertainment, I have the right to read, and it is only valid for breaks or dedicated entertainment breaks.");


// echo $rule1->getDescription()."<br>";
// echo $rule2->getDescription()."<br>";
echo $reward1->getDescription()."<br>";
echo $exception1->getDescription()."<br>";
echo $otherRules->getDescription();