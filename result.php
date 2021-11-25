<?php include 'header.php' ?>
<div class="container pt-5"> 
    
    <iframe width="500" height="200" src="https://www.youtube.com/embed/0JqAtARhjRE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <iframe width="500" height="200" src="https://www.youtube.com/embed/7HB7HKhqR18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="row pt-3 pb-5">
    <div class="col-md-12">
        <hr/>
        <h5 class="text-center" style="color:mediumpurple"> MENTAL ABILITY TEST </h5>
        <hr/>
    <p style="font-size:large; text-align:justify"> About 75–80 percent of mental retardation is familial (runs in families), and 20–25 percent is due to organic problems, such as chromosomal abnormalities or brain damage. Mild to severe mental retardation is a symptom of several hundred single-gene disorders and many chromosomal abnormalities, including small deletions. Based on twin studies, moderate to severe mental retardation does not appear to be familial, but mild mental retardation does. That is, the relatives of the moderate to severely mentally retarded have normal ranges of IQs, whereas the families of the mildly mentally retarded have IQs skewing lower.
</p>
    </div>
    <div class="col-md-1"></div>
     
    <div class="col-md-10">
     
    <?php
    
$sql="SELECT * from iqtest where formid='$_GET[formid]';";
$resultt=$conn->query($sql);
$row=$resultt->fetch_assoc();
$score=$row['result']; 
$res=round((($score/144)*100),0);

if($res<=30){
    $msg="<b> Profound Mental Retardation </b>
    Usually caused by a neurological condition. He/She require constant care.They have very limited ability to communicate and often have physical limitations. Individuals with mild to moderate disability are less likely to have associated medical conditions than those with severe or profound ID. ";  //  poor
}   
else if($res<=60){
    $msg=" <b>Severe Mental Retardation</b>
    They can be taught basic life skills and simple tasks with supervision.Severe ID manifests as major delays in development, and individuals often have the ability to understand speech but otherwise have limited communication skills . Despite being able to learn simple daily routines and to engage in simple self-care, individuals with severe ID need supervision in social settings and often need family care to live in a supervised setting such as a group home.";  //  consult
}   
else if($res<=70){
    $msg="<b>Moderate Retardation</b>
    Children require moderate supervision and assistance. They formally called Trainable Mentally Retarded hese individuals can learn practical life skills, which allows them to function in ordinary life with minimal levels of support. Individuals with moderate ID can take care of themselves, travel to familiar places in their community, and learn basic skills related to safety and health. Their self-care requires moderate support..";  // ok 
}   
else {
    $msg="<b>Mild Mental retardation</b><br>
    Children require mild support. They formally called Educable Mentally Retarded.<br>
    Here is the list of some schools in Punjab.
    <li>DAV Red Cross School for Special Children
 School</li>
<li>Ibadat Special School</li>
<li> Special education school</li>
<li>Smile Special School</li>
<li>Listening Ears Amritsar</li>
<li>Hukamnama Seva Ji</li>
<li>Nayee Disha , education for special children</li>
<li>Study For Success</li>
<li>Being A Brand</li>
<li>Deep Special School</li>
<li>Mothers Care Special School</li>
<li>Udaan Special School</li>
<li>Trident Academy- Special School</li>
<li>Shri Parkash Special School & therapy center moga punjab</li>
<li>Govt.Special Education School</li>
<li>Ambika Special school</li>
<li>Durga Das Agrawal Durga special school</li>
<li>Narowal Special Education School.</li>";     // best 
}
     ?>
        <table class='table'>
        <tr> <th> First Name </th><td><?php echo $row['first_name']; ?></td> 
            <th> Last Name </th><td> <?php echo $row['last_name']; ?></td></tr>
        
        <tr> <th> Gender </th><td><?php echo $row['gender']; ?></td> 
            <th> Date of Birth </th><td> <?php echo $row['dob']; ?></td></tr>
            
    
        <tr> <th> Max Point  </th><td> 144</td> 
            <th> Obtained  </th><td> <?php echo $row['result']; ?></td></tr> 
        <tr  style="background:mediumpurple;color:white" > <th colspan=2 class="text-center"> Score   </th></tr> 
            
        </table>
        
        <div class='bg-light p-3 border border-dark'>
        <?php  echo $msg ?>
        
        </div>
     
    </div></div>
</div>
<?php include 'footer.php' ?>