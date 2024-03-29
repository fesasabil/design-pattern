<?php

abstract class AbstractObserver 
{
    abstract function update(AbstractSubject $subject);
}

abstract class AbstractSubject
{
    abstract function attach(AbstractObserver $observer);
    abstract function detach(AbstractObserver $observer);
    abstract function notify();
}

function writeln($line)
{
    echo $line. "<br/>";
}

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {
        
    }

    public function update(AbstractSubject $subject)
    {
        writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
        writeln(' new favorite patterns: '.$subject->getFavorites());
        writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');
    }
}

class PatternSubject extends AbstractSubject {
    private $favoritePatterns = NULL;
    private $observers = array();
    function __construct() {
    }
    function attach(AbstractObserver $observer) {
      //could also use array_push($this->observers, $observer_in);
      $this->observers[] = $observer;
    }
    function detach(AbstractObserver $observer) {
      //$key = array_search($observer_in, $this->observers);
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer) { 
          unset($this->observers[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }
    function updateFavorites($newFavorites) {
      $this->favorites = $newFavorites;
      $this->notify();
    }
    function getFavorites() {
      return $this->favorites;
    }
}

  writeln('BEGIN TESTING OBSERVER PATTERN');
  writeln('');

  $patternGossiper = new PatternSubject();
  $patternGossipFan = new PatternObserver();
  $patternGossiper->attach($patternGossipFan);
  $patternGossiper->updateFavorites('abstract factory, decorator, visitor');
  $patternGossiper->updateFavorites('abstract factory, observer, decorator');
  $patternGossiper->detach($patternGossipFan);
  $patternGossiper->updateFavorites('abstract factory, observer, paisley');

  writeln('END TESTING OBSERVER PATTERN');
