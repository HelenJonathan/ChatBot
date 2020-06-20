<?php
    class Bot {
        private $name = "Alicia";
        private $gender = "Female";

        public function getname() {
            return $this->name;
        }

        public function getGender() {
            return $this->gender;
        }

        public function hears($message, callable $call) {
            $call(new Bot);
            return $message;
        }

        public function reply($response) {
            echo $response;
        }

        public function ask($question, array $questionDictionary) {
            $question = trim($question);
            foreach ($questionDictionary as $questions => $value) {
                if (strtolower($question) == strtolower($questions)) {
                    return $value;
                }
            }
        }
    }