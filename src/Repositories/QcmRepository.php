<?php
class QcmRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Récupère TOUS les qcm sans exception
     * @return array $qcms = Un tableau remplis d'objet Qcm
     */
    public function findAll(): array
    {
        $request = $this->db->query("SELECT * FROM `qcm` WHERE 1");
        $qcmsDatas = $request->fetchAll(PDO::FETCH_ASSOC);

        $qcms = [];
        foreach ($qcmsDatas as $qcmDatas) {
            $qcms[] = QcmMapper::mapToObject($qcmDatas);
        }
        return $qcms;
    }

}
