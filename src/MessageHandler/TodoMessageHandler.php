<?php

namespace App\MessageHandler;

use App\Entity\Todo;
use App\Message\TodoMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class TodoMessageHandler implements MessageHandlerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke(TodoMessage $message): void
    {
        $todo = new Todo();
    }
}
