<?php

use yii\db\Migration;

/**
 * Class m180527_205503_appointment
 */
class m180527_205503_appointment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180527_205503_appointment cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('tblAppointment',[
        'appointment_id' =>$this->primaryKey()->notNull(),
        'appointment_date'=>$this->date()->notNull(),
        'appointment_name'=>$this->text()->notNull(),
        'appointment_text'=>$this->text()->notNull(),
      ]);

      $this->insert('tblAppointment',[
          'appointment_date'=>'15-05-2018',
          'appointment_name'=>'Onur Taşkıran',
          'appointment_text'=>'DENEMEE'
      ]);
    }

    public function down()
    {
        echo "m180527_205503_appointment cannot be reverted.\n";

        return false;
    }

}
