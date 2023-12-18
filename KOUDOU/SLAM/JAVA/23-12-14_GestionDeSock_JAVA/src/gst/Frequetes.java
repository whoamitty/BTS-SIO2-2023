package gst;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.table.DefaultTableModel;

import conn.Connec;

import java.sql.*;

public class Frequetes extends JFrame implements ActionListener{
	ResultSet rst;
	Statement st;
	Connec cn=new Connec();
	JLabel lab1,lab2,lab3,lab4;
	JButton bt1,bt2,bt3,bt4,bt5;
	JTable tb,tb2,tb3,tb4;
	JScrollPane sp,sp2,sp3,sp4;
	JComboBox jcb1,jcb2,jcb3,jcb4;
	public Frequetes(){
		this.setTitle("chcode_appli");
		this.setSize(1000,600);
	this.setLocation(350,10);
	JPanel pan=new JPanel();
	pan.setLayout(null);
	pan.setBackground(new Color(0,250,250));
	add(pan);
	lab1=new JLabel("Restes en Stock");
	lab1.setBounds(220,20,100,30);
	pan.add(lab1);
	
	lab2=new JLabel("Historique des depots et retraits");
	lab2.setBounds(650,20,200,30);
	pan.add(lab2);
	
	lab3=new JLabel("Montant total des produits en stock:");
	lab3.setBounds(20,450,250,30);
	pan.add(lab3);
	
	lab4=new JLabel("Montant");
	lab4.setBounds(250,450,250,30);
	lab4.setForeground(Color.red);
	lab4.setFont(new Font("Arial",Font.BOLD,15));
	pan.add(lab4);
	
	//combo
	jcb1=new JComboBox();
	jcb1.addItem("depot");
	jcb1.addItem("retrait");
	jcb1.setBounds(610,60,80,20);
	pan.add(jcb1);
	
	jcb2=new JComboBox();
	jcb2.addItem("depot");
	jcb2.addItem("retrait");
	jcb2.setBounds(610,300,80,20);
	pan.add(jcb2);
	
	jcb4=new JComboBox();
	jcb4.addItem("sardine");
	jcb4.addItem("savon");
	jcb4.addItem("spagueti");
	jcb4.addItem("nescafe");
	jcb4.addItem("nido");

	jcb4.setBounds(150,60,100,20);
	pan.add(jcb4);
	
	jcb3=new JComboBox();
	jcb3.addItem("01-06-2018");jcb3.addItem("02-06-2018");jcb3.addItem("03-06-2018");jcb3.addItem("04-06-2018");
	jcb3.addItem("05-06-2018");jcb3.addItem("06-06-2018");jcb3.addItem("07-06-2018");jcb3.addItem("08-06-2018");
	jcb3.addItem("08-06-2018");jcb3.addItem("08-06-2018");jcb3.addItem("10-06-2018");jcb3.addItem("11-06-2018");
	jcb3.addItem("12-06-2018");jcb3.addItem("13-06-2018");jcb3.addItem("14-06-2018");jcb3.addItem("15-06-2018");
	jcb3.setFont(new Font("Arial",Font.BOLD,12));
	
	jcb3.setBounds(720,300,90,20);
	pan.add(jcb3);
	
	//JBUTTON
	bt1=new JButton("OK");
	bt1.setBounds(710,60,60,20);
	bt1.addActionListener(this);
	pan.add(bt1);
	
	bt2=new JButton("OK");
	bt2.setBounds(820,300,60,20);
	bt2.addActionListener(this);
	pan.add(bt2);
	
	bt3=new JButton("OK");
	bt3.setBounds(270,60,60,20);
	bt3.addActionListener(this);
	pan.add(bt3);
	

	bt4=new JButton("Mouvement");
	bt4.setBounds(20,500,100,20);
	bt4.addActionListener(this);
	pan.add(bt4);
	
	bt5=new JButton("Produit");
	bt5.setBounds(220,500,100,20);
	bt5.addActionListener(this);
	pan.add(bt5);


	DefaultTableModel df=new DefaultTableModel();
	init();
	df.addColumn("Code du produit");
	df.addColumn("Nom du produit");
	df.addColumn("Prix_unitaire");
	df.addColumn("Quantité en stock ");
	df.addColumn("Montant Total");
    tb.setModel(df);
    pan.add(sp);
    
    //
    DefaultTableModel df2=new DefaultTableModel();
	init2();
  	df2.addColumn("Code du produit");
  	df2.addColumn("Quantité");
  	df2.addColumn("Date");
      tb2.setModel(df2);
      pan.add(sp2);//
      //
      DefaultTableModel df3=new DefaultTableModel();
  	init3();
    	df3.addColumn("Code du produit");
    	df3.addColumn("Quantité");
    	df3.addColumn("Date");
        tb3.setModel(df3);
        pan.add(sp3);//
        
        DefaultTableModel df4=new DefaultTableModel();
    	init4();
    	df4.addColumn("Code du produit");
    	df4.addColumn("Nom du produit");
    	df4.addColumn("Prix_unitaire");
    	df4.addColumn("Quantité en stock ");
    	df4.addColumn("Montant Total");
        tb4.setModel(df4);
        pan.add(sp4);
       
    
    
    
	String qr="select codeprod,nomprod,prix,sum(qte) as stock,sum(qte)*prix as montant from vue1 group by codeprod ";
	try{
		st=cn.connecion().createStatement();
		rst=st.executeQuery(qr);
		while(rst.next()){
			df.addRow(new Object[]{
					rst.getString("codeprod"),
					rst.getString("nomprod"),
					rst.getString("prix"),
					rst.getString("stock"),
					rst.getString("montant")
					
			});
			
		}
	}
	catch(SQLException ex){
		
	}
	//
	String qery="select sum(prix*qte) as total from vue1";
	try{
		st=cn.connecion().createStatement();
		rst=st.executeQuery(qery);
		if(rst.next()){
			lab4.setText(rst.getString("total"));
		}
		
	}
	catch(SQLException ex){
		
	}
	
		
	}
	public void init(){
		tb=new JTable();
		sp=new JScrollPane();
		sp.setViewportView(tb);
		sp.setBounds(20,150,500,300);
	}
	private void init2(){
		tb2=new JTable();
		sp2=new JScrollPane();
		sp2.setViewportView(tb2);
		sp2.setBounds(550,90,400,200);
		
	}
	private void init3(){
		tb3=new JTable();
		sp3=new JScrollPane();
		sp3.setViewportView(tb3);
		sp3.setBounds(550,330,400,200);
		
	}
	private void init4(){
		tb4=new JTable();
		sp4=new JScrollPane();
		sp4.setViewportView(tb4);
		sp4.setBounds(20,100,500,40);
		
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Frequetes fr=new Frequetes();
		fr.setVisible(true);
	}
	
	
	@Override
	public void actionPerformed(ActionEvent e) {
		// TODO Auto-generated method stub
		if(e.getSource()==bt1){
			DefaultTableModel df2=new DefaultTableModel();
		  	df2.addColumn("Code du produit");
		  	df2.addColumn("Quantité");
		  	df2.addColumn("Date");
		      tb2.setModel(df2);
		      String a;
		      a=jcb1.getSelectedItem().toString();
		     
		  String qrr="select codeprd,quantite,date from mouvmt where nature='"+a+"' order by codeprd";
		  		
		  try{
			  st=cn.connecion().createStatement();
			  rst=st.executeQuery(qrr);
			  while(rst.next()){
				  df2.addRow(new Object[]{
						  rst.getString("codeprd"),rst.getString("quantite"),rst.getString("date")
				  });
				  
			  }
		  }
		  catch(SQLException ex){
			  
		  }
			
			
		}//
		if(e.getSource()==bt2){
			DefaultTableModel df3=new DefaultTableModel();
		  	df3.addColumn("Code du produit");
		  	df3.addColumn("Quantité");
		  	df3.addColumn("Date");
		      tb3.setModel(df3);
		      String a,b;
		      a=jcb2.getSelectedItem().toString();
		      b=jcb3.getSelectedItem().toString();
		     
		  String qrr="select codeprd,quantite,date from mouvmt where nature='"+a+"' and date='"+b+"' order by codeprd";
		  		
		  try{
			  st=cn.connecion().createStatement();
			  rst=st.executeQuery(qrr);
			  while(rst.next()){
				  df3.addRow(new Object[]{
						  rst.getString("codeprd"),rst.getString("quantite"),rst.getString("date")
				  });
				  
			  }
		  }
		  catch(SQLException ex){
			  
		  }
			
			
		}//
		if(e.getSource()==bt3){
			DefaultTableModel df4=new DefaultTableModel();
		  	df4.addColumn("Code du produit");
			df4.addColumn("Nom du produit");
			df4.addColumn("Prix_unitaire");
			df4.addColumn("Quantité en stock ");
			df4.addColumn("Montant Total");
		    tb4.setModel(df4);
		     
		      String a;
		      a=jcb4.getSelectedItem().toString();
		     
		     
		      String qr="select codeprod,nomprod,prix,sum(qte) as stock,sum(qte)*prix as montant from vue1 where nomprod='"+a+"' "
		      		+ " group by codeprod ";
		      		
		  		
		  try{
			  st=cn.connecion().createStatement();
			  rst=st.executeQuery(qr);
			  if(rst.next()){
				  df4.addRow(new Object[]{
						  rst.getString("codeprod"),
							rst.getString("nomprod"),
							rst.getString("prix"),
							rst.getString("stock"),
							rst.getString("montant")
				  });
				  
			  }
			  else
				  JOptionPane.showMessageDialog(this,"Introuvable!",null,JOptionPane.ERROR_MESSAGE);
		  }
		  catch(SQLException ex){
			  
		  }
			
			
		}//
		if(e.getSource()==bt4){
			dispose();
			FgestionMouv fm=new FgestionMouv();
			fm.setVisible(true);
			
		}
		if(e.getSource()==bt5){
			dispose();
			FgestionProd fm=new FgestionProd();
			fm.setVisible(true);
			
		}
		
		
	}

	
	
		
	

}
