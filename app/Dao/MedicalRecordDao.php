<?php
    namespace App\Dao;
    use App\Medical_Record;

    class MedicalRecordDao
    {
        public static function getMedicalRecord($record_patient)
        {
            $record = Medical_Record::where('patient_id', $record_patient)->get();
            return $record;
        }

        public static function createMedicalRecord($id_patient, $id_disease, $id_hospital, $id_visit, $anamnesia){
            Medical_Record::create([
            
                'patient_id' => $id_patient,
                'disease_id' => $id_disease,
                'hospital_id' => $id_hospital,
                'visit_id' => $id_visit,
                'anamnesia' => $anamnesia
            ]); 
        }
    }
?>