<?php 
       Schema::create('slider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slider_title');
            $table->string('slider_slug');
            $table->string('slider_file');
            $table->string('slider_content');
            $table->string('slider_status');
            $table->timestamps();
        });


          DB::table('slider')->insert([
            'slider_title' => 'slider title 01',
            'slider_slug' => 'slider slug 01',
            'slider_file' => 'slider file 01',
            'slider_content' => 'slider content 01',
            'slider_status' => 'slider status 01',
        ]);
?>

