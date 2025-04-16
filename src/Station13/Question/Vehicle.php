<?php

namespace Src\Station13\Question;

class Vehicle
{
  protected String $name;
  protected int $maxSpeed;

  // public function __construct(protected String $name, protected int $maxSpeed)
  // {
  //   $this->name = $name;
  //   $this->maxSpeed = $maxSpeed;
  // }

  public function turnRight()
  {
      $this->stop();
      $this->right();
      $this->run();
  }

  public function backLeft()
  {
      $this->stop();
      $this->left();
      $this->back();
  }

  protected function run()
  {
      echo 'アクセルを踏む';
  }

  private function stop()
  {
      echo 'ブレーキを踏む';
  }

  private function right()
  {
      echo '右にハンドルを回す';
  }

  private function left()
  {
      echo '左にハンドルを回す';
  }

  protected function back()
  {
      echo 'バックする';
  }

}
