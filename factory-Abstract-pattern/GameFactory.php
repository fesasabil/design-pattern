<?php

interface GameFactory
{
    function createLevel(): Level;

    function createArena(): Arena;
}

class GameFactoryEasy implements GameFactory
{
    function createLevel(): Level
    {
        return new LevelEasy();
    }

    function createArena(): Arena
    {
        return new ArenaEasy();
    }
}

class GameFactoryMedium implements GameFactory
{
    function createLevel(): Level
    {
        return new LevelMedium();
    }

    function createArena(): Arena
    {
        return new ArenaMedium();
    }
}

class GameFactoryHard implements GameFactory
{
    function createLevel(): Level
    {
        return new LevelHard();
    }

    function createArena(): Arena
    {
        return new ArenaHard();
    }
}