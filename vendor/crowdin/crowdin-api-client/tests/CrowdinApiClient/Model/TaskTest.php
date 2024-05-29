<?php

namespace CrowdinApiClient\Tests\Model;

use CrowdinApiClient\Model\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * @var Task
     */
    public $task;

    public $data = [
        'id' => 2,
        'projectId' => 2,
        'creatorId' => 6,
        'type' => 1,
        'vendor' => 'gengo',
        'status' => 'todo',
        'title' => 'French',
        'assignees' =>
            [
                0 =>
                    [
                        'id' => 1,
                        'wordsCount' => 5,
                    ],
            ],
        "assignedTeams" => [
            [
                'id' => 1,
                'wordsCount' => 5,
            ]
        ],
        'fileIds' =>
            [
                0 => 1,
            ],
        'progress' =>
            [
                'total' => 24,
                'done' => 15,
                'percent' => 62,
            ],
        'translateProgress' => null,
        'sourceLanguageId' => 'en',
        'targetLanguageId' => 'fr',
        'description' => 'Proofrea all French strings',
        'hash' => 'dac37aff364d83899128e68afe0de4994',
        'translationUrl' => '/proofrea/9092638ac9f2a2d1b5571d08edc53763/all/en-fr/10?task=dac37aff364d83899128e68afe0de4994',
        'wordsCount' => 24,
        'filesCount' => 2,
        'commentsCount' => 0,
        'deadline' => '2019-09-27T07:00:14+00:00',
        'timeRange' => 'string',
        'workflowStepId' => 10,
        'buyUrl' => 'https://www.paypal.com/cgi-bin/webscr?cmd=...',
        'createdAt' => '2019-09-23T09:04:29+00:00',
        'updatedAt' => '2019-09-23T09:04:29+00:00',
        'isArchived' => false
    ];

    public function testLoadData()
    {
        $this->task = new Task($this->data);
        $this->checkData();
    }

    public function testSetData()
    {
        $this->task = new Task();
        $this->task->setStatus($this->data['status']);
        $this->task->setTitle($this->data['title']);
        $this->task->setAssignees($this->data['assignees']);
        $this->task->setAssignedTeams($this->data['assignedTeams']);
        $this->task->setFileIds($this->data['fileIds']);
        $this->task->setDescription($this->data['description']);
        $this->task->setDeadline($this->data['deadline']);
        $this->task->setIsArchived($this->data['isArchived']);

        $this->assertEquals($this->data['status'], $this->task->getStatus());
        $this->assertEquals($this->data['title'], $this->task->getTitle());
        $this->assertEquals($this->data['assignees'], $this->task->getAssignees());
        $this->assertEquals($this->data['assignedTeams'], $this->task->getAssignedTeams());
        $this->assertEquals($this->data['fileIds'], $this->task->getFileIds());
        $this->assertEquals($this->data['description'], $this->task->getDescription());
        $this->assertEquals($this->data['deadline'], $this->task->getDeadline());
        $this->assertEquals($this->data['isArchived'], $this->task->isArchived());
    }

    public function checkData()
    {
        $this->assertEquals($this->data['id'], $this->task->getId());
        $this->assertEquals($this->data['projectId'], $this->task->getProjectId());
        $this->assertEquals($this->data['creatorId'], $this->task->getCreatorId());
        $this->assertEquals($this->data['type'], $this->task->getType());
        $this->assertEquals($this->data['vendor'], $this->task->getVendor());
        $this->assertEquals($this->data['status'], $this->task->getStatus());
        $this->assertEquals($this->data['title'], $this->task->getTitle());
        $this->assertEquals($this->data['assignees'], $this->task->getAssignees());
        $this->assertEquals($this->data['assignedTeams'], $this->task->getAssignedTeams());
        $this->assertEquals($this->data['fileIds'], $this->task->getFileIds());
        $this->assertEquals($this->data['progress'], $this->task->getProgress());
        $this->assertEquals($this->data['translateProgress'], $this->task->getTranslateProgress());
        $this->assertEquals($this->data['sourceLanguageId'], $this->task->getSourceLanguageId());
        $this->assertEquals($this->data['targetLanguageId'], $this->task->getTargetLanguageId());
        $this->assertEquals($this->data['description'], $this->task->getDescription());
        $this->assertEquals($this->data['hash'], $this->task->getHash());
        $this->assertEquals($this->data['translationUrl'], $this->task->getTranslationUrl());
        $this->assertEquals($this->data['wordsCount'], $this->task->getWordsCount());
        $this->assertEquals($this->data['filesCount'], $this->task->getFilesCount());
        $this->assertEquals($this->data['commentsCount'], $this->task->getCommentsCount());
        $this->assertEquals($this->data['deadline'], $this->task->getDeadline());
        $this->assertEquals($this->data['timeRange'], $this->task->getTimeRange());
        $this->assertEquals($this->data['workflowStepId'], $this->task->getWorkflowStepId());
        $this->assertEquals($this->data['buyUrl'], $this->task->getBuyUrl());
        $this->assertEquals($this->data['createdAt'], $this->task->getCreatedAt());
        $this->assertEquals($this->data['updatedAt'], $this->task->getUpdatedAt());
        $this->assertEquals($this->data['isArchived'], $this->task->isArchived());
    }
}
