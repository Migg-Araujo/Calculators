package JAVA;

import javax.swing.*;


public class Main {

    public static void main(String[] args) {
        
        JFrame frame = new JFrame();
        frame.setSize(656, 839);
        frame.setVisible(true);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(null);
        frame.setResizable(false);

        JLabel screen = new JLabel();
        screen.setOpaque(true);
        
        JTextField input = new JTextField();
        JButton C = new JButton();
        C.setBounds(0, 0, 160, 160);
        input.setBounds(160, 0, 480, 160);
        JButton Button1 = new JButton();
        Button1.setBounds(0, 160, 160, 160);
        JButton Button2 = new JButton();
        Button2.setBounds(160, 160, 160, 160);
        JButton Button3 = new JButton();
        Button3.setBounds(320, 160, 160, 160);
        JButton ButtonPlus = new JButton();
        ButtonPlus.setBounds(480, 160, 160, 160);
        JButton Button4 = new JButton();
        Button4.setBounds(0, 320, 160, 160);
        JButton Button5 = new JButton();
        Button5.setBounds(160, 320, 160, 160);
        JButton Button6 = new JButton();
        Button6.setBounds(320, 320, 160, 160);
        JButton ButtonMinus = new JButton();
        ButtonMinus.setBounds(480, 320, 160, 160);
        JButton Button7 = new JButton();
        Button7.setBounds(0, 480, 160, 160);
        JButton Button8 = new JButton();
        Button8.setBounds(160, 480, 160, 160);
        JButton Button9 = new JButton();
        Button9.setBounds(320, 480, 160, 160);
        JButton ButtonTimes = new JButton();
        ButtonTimes.setBounds(480, 480, 160, 160);
        JButton Button0 = new JButton();
        Button0.setBounds(0, 640, 160, 160);
        JButton ButtonDot = new JButton();
        ButtonDot.setBounds(160, 640, 160, 160);
        JButton ButtonEqual = new JButton();
        ButtonEqual.setBounds(320, 640, 160, 160);
        JButton ButtonDivide = new JButton();
        ButtonDivide.setBounds(480, 640, 160, 160);

        frame.add(screen);
        frame.add(C);
        frame.add(input);
        frame.add(Button1);
        frame.add(Button2);
        frame.add(Button3);
        frame.add(ButtonPlus);
        frame.add(Button4);
        frame.add(Button5);
        frame.add(Button6);
        frame.add(ButtonMinus);
        frame.add(Button7);
        frame.add(Button8);
        frame.add(Button9);
        frame.add(ButtonTimes);
        frame.add(Button0);
        frame.add(ButtonDot);
        frame.add(ButtonEqual);
        frame.add(ButtonDivide);
    }
}