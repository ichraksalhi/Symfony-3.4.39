<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     * @Assert\Length(max=1)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datee", type="date", nullable=false)
     */
    private $datee;

    /**
     * @param \DateTime $datee
     */
    public function setDatee($datee)
    {
        $this->datee = $datee;
    }

    /**
     * @return \DateTime
     */
    public function getDatee()
    {
        return $this->datee;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="reclamation_id", type="integer")
     */
    private  $reclamation_id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @return mixed
     */
    public function getReclamationId()
    {
        return $this->reclamation_id;
    }

    /**
     * @param mixed $reclamation_id
     */
    public function setReclamationId($reclamation_id)
    {
        $this->reclamation_id = $reclamation_id;
    }


}

