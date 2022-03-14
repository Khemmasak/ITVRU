 <!-- ***** Blog Small Start ***** -->
 <section class="section" id="blog">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <?php 
                    $no = 0;
                    $sql = "SELECT * FROM tb_news WHERE (major_news='OF' OR major_news='IT') AND status_news='true' ORDER BY date_news DESC";  
                    $result = $conn->query($sql);
                    if ($result->num_rows){
                        while($row = $result->fetch_assoc()) { 
                    ?>
                    <div class="item service-item">
                        <div class="icon">
                        <?php if($row['img_news']){?>
                            <i><img src="https://sci.vru.ac.th/assets/images/news/<?php echo $row['img_news'] ?>" alt=""></i>
                        <?php }else{ ?>
                            <i><img src="assets/images/logoIT.png" alt=""></i>
                        <?php } ?>
                        </div>
                        <h5 class="service-title"><?php echo $row['title_news'] ?></h5>
                        <p><?php echo date_format(new DateTime($row['date_news']),"j F Y"); ?></p>
                        <?php
                        if ($row['link_news']){ 
                        ?>
                        <a href="<?php echo $row['link_news'] ?>" class="main-button">Read More</a>
                        <?php  } else { ?>
                        <a href="https://sci.vru.ac.th/assets/files/News/<?php echo $row['name_news'] ?>" class="main-button">Read More</a>
                        <?php } ?>
                    </div>
                    <?php 
                    if ($no == 30) {
                        break;
                    }
                            $no++;
                        }
                    } 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Small End ***** -->