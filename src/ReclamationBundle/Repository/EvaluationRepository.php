<?php

namespace ReclamationBundle\Repository;

/**
 * EvaluationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvaluationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT q
                FROM ReclamationBundle:TabReclamation q
                WHERE q.note LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }
    public function findPostByid($id)
    {
        try {
            return $this->getEntityManager()
                ->createQuery(
                    "SELECT p
                FROM ReclamationBundle:Evaluation
                p WHERE p.id =:id"
                )
                ->setParameter('id', $id)
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
        }
    }
    public function findevaluationbyword($evaluation){
        return $this->createQueryBuilder('e')
            ->where('e.note LIKE :name')
            ->setParameter(':name', '%'.$evaluation.'%')
            ->getQuery()
            ->execute();

    }
    public function MoyNoteOpinion()
    {
        $query=$this->getEntityManager()
            ->createQuery("select SUM(o.note),COUNT(o.note)from ReclamationBundle:Evaluation as o ");
        return $query->getSingleResult();

    }

    public function NbrNoteOpinion()
    {
        $query=$this->getEntityManager()
            ->createQuery("select COUNT(o.id) as nbr from ReclamationBundle:Evaluation as o group by o.note order by o.note DESC ");
        return $query->getResult();

    }

}

