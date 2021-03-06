package org.delft.naward07.Utils.ImageUtils;

import javax.imageio.ImageIO;
import java.awt.Graphics2D;
import java.awt.RenderingHints;
import java.awt.geom.AffineTransform;
import java.awt.image.BufferedImage;
import java.awt.image.ColorModel;
import java.awt.image.WritableRaster;
import java.io.IOException;
import java.io.InputStream;
import java.math.BigInteger;

/**
 * Class to process the image.
 *
 * Created by Feng Wang on 14-6-11.
 */
public class ImageHelper {
    /**
     * Image size threshold in generating the image finger print.
     */
    private static final int MIN_SIZE = 8;
    private static final int MAX_SIZE = 4000;

    public static final String path = System.getProperty("user.dir");

    /**
     * image resize <br/>
     * save:ImageIO.write(BufferedImage, imgType[jpg/png/gif/...], File);
     *
     * @param source source image
     * @param width  width
     * @param height height
     * @param b      keep ratio
     */
    public static BufferedImage resize(BufferedImage source, int width,
                                       int height, boolean b) {
        int type = source.getType();
        BufferedImage target = null;
        double sx = (double) width / source.getWidth();
        double sy = (double) height / source.getHeight();

        if (b) {
            if (sx > sy) {
                sx = sy;
                width = (int) (sx * source.getWidth());
            } else {
                sy = sx;
                height = (int) (sy * source.getHeight());
            }
        }

        if (type == BufferedImage.TYPE_CUSTOM) { // handmade
            ColorModel cm = source.getColorModel();
            WritableRaster raster = cm.createCompatibleWritableRaster(width,
                    height);
            boolean alphaPremultiplied = cm.isAlphaPremultiplied();
            target = new BufferedImage(cm, raster, alphaPremultiplied, null);
        } else
            target = new BufferedImage(width, height, type);
        Graphics2D g = target.createGraphics();
        // smoother than exlax:
        g.setRenderingHint(RenderingHints.KEY_RENDERING,
                RenderingHints.VALUE_RENDER_QUALITY);
        g.drawRenderedImage(source, AffineTransform.getScaleInstance(sx, sy));
        g.dispose();
        return target;
    }

    /**
     * Calculate gray value
     *
     * @param pixels pixels
     * @return int gray value
     */
    public static int rgbToGray(int pixels) {
        // int _alpha = (pixels >> 24) & 0xFF;
        int _red = (pixels >> 16) & 0xFF;
        int _green = (pixels >> 8) & 0xFF;
        int _blue = (pixels) & 0xFF;
        return (int) (0.3 * _red + 0.59 * _green + 0.11 * _blue);
    }

    /**
     * Calculate mean value of array
     *
     * @param pixels array
     * @return int mean value
     */
    public static int average(int[] pixels) {
        float m = 0;
        for (int i = 0; i < pixels.length; ++i) {
            m += pixels[i];
        }
        m = m / pixels.length;
        return (int) m;
    }

    /**
     * Get image hash code.
     *
     * @param input Image Inputstream
     * @return Image hashcode
     * @throws Exception
     */
    public static String imageFingerPrint(InputStream input) throws Exception {
        BufferedImage source = ImageIO.read(input);
        if (source == null) {
            System.out.println("no image");
            return "";
        } else {
            System.out.println("image exist, height:" + source.getHeight());
            System.out.println("image exist, width:" + source.getWidth());

            if (source.getHeight() < MIN_SIZE || source.getWidth() < MIN_SIZE)
                return "";
            if (source.getHeight() > MAX_SIZE && source.getWidth() > MAX_SIZE)
                return "";

            ImageHelperPHash ihph = new ImageHelperPHash();
            String hc2 = ihph.getHash(source);

            int width = 8;
            int height = 8;

            BufferedImage imSmall = ImageHelper.resize(source, width, height, false);

            int[] pixels = new int[width * height];
            for (int i = 0; i < width; i++) {
                for (int j = 0; j < height; j++) {
                    pixels[i * height + j] = ImageHelper.rgbToGray(imSmall.getRGB(i, j));
                }
            }

            int avgPixel = ImageHelper.average(pixels);

            int[] comps = new int[width * height];
            for (int i = 0; i < comps.length; i++) {
                if (pixels[i] >= avgPixel) {
                    comps[i] = 1;
                } else {
                    comps[i] = 0;
                }
            }

//            String hc = Arrays.toString(comps);
//            hc = hc.replace("[", "");
//            hc = hc.replace("]", "");
//            hc = hc.replace(",", "");
//            hc = hc.replace(" ", "");

            StringBuffer hashCode = new StringBuffer();
            for (int i = 0; i < comps.length; i += 4) {
                int result = comps[i] * (int) Math.pow(2, 3) + comps[i + 1] * (int) Math.pow(2, 2) + comps[i + 2] * (int) Math.pow(2, 1) + comps[i + 2];
                hashCode.append(ImageHelper.binaryToHex(result));
            }

            StringBuffer hashCode2 = new StringBuffer();
            int[] comps2 = new int[(hc2 + "000").length()];
            for (int i = 0; i < comps2.length; i++) {
                comps2[i] = Integer.parseInt((hc2 + "000").charAt(i) + "");
            }
            for (int i = 0; i < comps2.length; i += 4) {
                int result = comps2[i] * (int) Math.pow(2, 3) + comps2[i + 1] * (int) Math.pow(2, 2) + comps2[i + 2] * (int) Math.pow(2, 1) + comps2[i + 2];
                hashCode2.append(ImageHelper.binaryToHex(result));
            }

            return hashCode.toString() + "|" + hashCode2.toString() + "|" + source.getHeight() + "|" + source.getWidth();
        }
    }

    /**
     * Binary to hex
     *
     * @param int binary
     * @return char hex
     */
    public static char binaryToHex(int binary) {
        char ch = ' ';
        switch (binary) {
            case 0:
                ch = '0';
                break;
            case 1:
                ch = '1';
                break;
            case 2:
                ch = '2';
                break;
            case 3:
                ch = '3';
                break;
            case 4:
                ch = '4';
                break;
            case 5:
                ch = '5';
                break;
            case 6:
                ch = '6';
                break;
            case 7:
                ch = '7';
                break;
            case 8:
                ch = '8';
                break;
            case 9:
                ch = '9';
                break;
            case 10:
                ch = 'a';
                break;
            case 11:
                ch = 'b';
                break;
            case 12:
                ch = 'c';
                break;
            case 13:
                ch = 'd';
                break;
            case 14:
                ch = 'e';
                break;
            case 15:
                ch = 'f';
                break;
            default:
                ch = ' ';
        }
        return ch;
    }

//    public static String hex2Binary(String s) {
//        return new BigInteger(s, 16).toString(2);
//    }

    /**
     * Convert HEX string to binary string.
     *
     * @param Hex HEX string
     * @return Binary string
     */
    public static String hex2Binary(String Hex) {
        StringBuilder sb = new StringBuilder();
        for(int i = 0; i < Hex.length(); i ++){
            String bin = new BigInteger(Hex.substring(i, i + 1), 16).toString(2);
            while (bin.length() < 4)
                bin = "0" + bin;
            sb.append(bin);
        }
        return sb.toString();
    }

    public static void main(String[] args) {
        System.out.println(ImageHelper.hex2Binary("a14aa1dbdb818f9759"));
        System.out.println(ImageHelper.hex2Binary("111111111111111111"));
    }

}
