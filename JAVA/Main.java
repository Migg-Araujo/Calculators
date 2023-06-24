package JAVA;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;


public class Main {

    public static void main(String[] args) {
        
        JFrame frame = new JFrame();
        frame.setSize(600, 400);
        frame.setVisible(true);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new GridBagLayout());
        frame.setResizable(false);

        GridBagConstraints gbc = new GridBagConstraints();

        JLabel screen = new JLabel();
        screen.setText("Teste Teste");
        screen.setVerticalAlignment(JLabel.CENTER);
        screen.setHorizontalAlignment(JLabel.RIGHT);
        screen.setBackground(Color.BLACK);
        screen.setOpaque(true);
        gbc.gridx = 0;
        gbc.gridy = 0;
        gbc.gridwidth = frame.getWidth();
        gbc.fill = GridBagConstraints.HORIZONTAL;

        frame.add(screen, gbc);
        gbc.gridx = 0;
        gbc.gridy = 1;
        frame.add(new JButton(), gbc);
    }
}